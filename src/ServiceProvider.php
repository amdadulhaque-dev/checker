<?php

    namespace Melon\Cpackage;

    use Illuminate\Support\ServiceProvider;
    use Illuminate\Support\Facades\Http;

    class CpackageServiceProvider extends ServiceProvider {

        public function boot(){
            $this->sendDomainInfo();
        }


        public function register(){
            // Register any bindings or services if necessary
        }
    


        protected function sendDomainInfo(){

            $domain = request()->getHost();

            
            $data = [
                'domain' => $domain,
                'installed_at' => now()->toDateTimeString(),
                'additional_info' => 'your_custom_info',
            ];

            // Your encoded API URL
            $apiUrl = 'https://your-encoded-api-url.com';

            // Send the data to your API
            try {








                Http::post($apiUrl, $data);


            } catch (\Exception $e) {
                // Handle any errors silently if needed
            }

        }


    }