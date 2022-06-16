<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Configuration;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use ZipArchive;

class GeneratorTeamsAppController extends Controller
{
    protected $app_key;
    protected $short_name;
    protected $full_name;
    protected $short_description;
    protected $full_description;
    protected $image;
    protected $company_name;
    protected $company_website;
    protected $terms_and_conditions;
    protected $privacy_policy;
    protected $baseUrl;

    function __construct(){
        $configuration = Configuration::all();
        $this->app_key = $configuration->where('key', 'app_key')->first()->value;
        $this->short_name = $configuration->where('key', 'short_name')->first()->value;
        $this->full_name = $configuration->where('key', 'full_name')->first()->value;
        $this->short_description = $configuration->where('key', 'short_description')->first()->value;
        $this->full_description = $configuration->where('key', 'full_description')->first()->value;
        $this->image = $configuration->where('key', 'image')->first()->value;
        $this->company_name = $configuration->where('key', 'company_name')->first()->value;
        $this->company_website = $configuration->where('key', 'company_website')->first()->value;
        $this->terms_and_conditions = $configuration->where('key', 'terms_and_conditions')->first()->value;
        $this->privacy_policy = $configuration->where('key', 'privacy_policy')->first()->value;
        $this->baseUrl = URL::to('/') . '/' . $this->app_key;
    }

    public function createJson(){
        $json = '{
            "$schema": "https://developer.microsoft.com/en-us/json-schemas/teams/v1.11/MicrosoftTeams.schema.json",
            "version": "1.0.0",
            "manifestVersion": "1.11",
            "id": "'.$this->app_key.'",
            "packageName": "com.package.name",
            "name": {
                "short": "'.$this->short_name.'",
                "full": "'.$this->full_name.'"
            },
            "developer": {
                "name": "Matheus Teixeira",
                "mpnId": "",
                "websiteUrl": "'.$this->company_website.'",
                "privacyUrl": "'.$this->privacy_policy.'",
                "termsOfUseUrl": "'.$this->terms_and_conditions.'"
            },
            "description": {
                "short": "'.$this->short_description.'",
                "full": "'.$this->full_description.'"
            },
            "icons": {
                "outline": "outline.png",
                "color": "color.png"
            },
            "accentColor": "#FFFFFF",
            "staticTabs": [{
                "entityId": "886a86cd-8954-4e01-90f7-b6e5a683b30c",
                "name": "Portal",
                "contentUrl": "'.$this->baseUrl.'",
                "websiteUrl": "'.$this->baseUrl.'",
                "scopes": ["personal"]
            }, {
                "entityId": "about",
                "scopes": ["personal"]
            }],
            "validDomains": ["'.URL::to('/').'"]
        }';
        return $json;
    }

    public function createJsonFile(){
        return Storage::disk('public')->put('app/manifest.json', $this->createJson());
    }

    public function createZipFile(){
        $zip = new ZipArchive();

        $fileName = 'storage/app.zip'; // nome do zip
        $zipPath = public_path($fileName); // path do zip

        if ($zip->open($zipPath, ZipArchive::CREATE) == TRUE)
        {
          // arquivos que serao adicionados ao zip
          $files = File::files(public_path('storage/app'));

          foreach ($files as $key => $value) {
            // nome/diretorio do arquivo dentro do zip
            $relativeNameInZipFile = basename($value);

            // adicionar arquivo ao zip
            $zip->addFile($value, $relativeNameInZipFile);
          }

          // concluir a operacao
          $zip->close();
        }
        return true;
    }

    public function generate(){
        $this->createJsonFile();
        $this->addOulineImageOnAppFolder();
        if($this->createZipFile()){
            return $this->downloadZipFile();
        }else{
            return false;
        }
    }

    public function downloadZipFile(){
        $file = public_path('storage/app.zip');
        return response()->download($file);
    }

    public function addOulineImageOnAppFolder()
    {
        // Copia a imagem para o diretorio app
        $image = public_path('outline.png');
        $destinationPath = public_path('storage/app/outline.png');
        return copy($image, $destinationPath);
    }
}
