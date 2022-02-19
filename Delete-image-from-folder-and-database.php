
//delete Multiple images from folder and database
 public function Delete(Request  $request){

        $project = Project::find($request->delete_id);

            $projectimg = Image::where('project_id',$request->delete_id)->get();

           foreach($projectimg as $img){
            //my image path like this in folder    public/storage/images/projects/Home.JPG-1645270384.JPG
            //my image path like this in database  storage/images/projects/Home.JPG-1645270384.JPG
            $image_path = public_path().'/'.$img->path;
            unlink($image_path);
           }

           $projectimgd = Image::where('project_id',$request->delete_id);
           $projectimgd->delete();

            $project->delete();

        if($project){
           return back()->with('message','Project Delete Successfully');
       }else{
           return back()->with('error','Project Not Delete Somthing Wrong!');
       }
    }




//delete Single image from folder and database
 public function Delete(Request  $request){

        $project = Project::find($request->delete_id);

            $projectimg = Image::where('project_id',$request->delete_id)->first();

          
            //my image path like this in folder    public/storage/images/projects/Home.JPG-1645270384.JPG
            //my image path like this in database  storage/images/projects/Home.JPG-1645270384.JPG
            $image_path = public_path().'/'.$projectimg->path;
            unlink($image_path);
         

           $projectimgd = Image::where('project_id',$request->delete_id);
           $projectimgd->delete();

            $project->delete();

        if($project){
           return back()->with('message','Project Delete Successfully');
       }else{
           return back()->with('error','Project Not Delete Somthing Wrong!');
       }
    }
