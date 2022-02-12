

//single file upload

$files = $request->file('file');
 $file_name = time().$files->getClientOriginalExtension();
            $files->move('storage/images/clients/',$file_name);
            $image = 'storage/images/clients/'.$file_name;

            $client = new Client();
            $client->image = $image;
            $client->save();
            
            
            
// multiple files upload



 $image = $request->file('file');
        foreach($image as $index => $files) {

            $file_name = time().$index . "." . $files->getClientOriginalExtension();
            $files->move('storage/images/clients/',$file_name);
            $image = 'storage/images/clients/'.$file_name;

            $client = new Client();
            $client->image = $image;
            $client->save();

            

        }
        
        
        
        
