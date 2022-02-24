//retun in view page errors
//in controller
$request->validate([
          'first_name' => 'required',
          'last_name' => 'required',
          'username' => 'required|unique:users',
          'date_of_birth' => 'required',
          'email' => 'required|unique:users',
          'phone' => 'required',
          'password' => 'required',
          ]);
          
//in view blade show errors
@error('first_name')
               <span class="text-danger" >
                   <strong>{{ $message }}</strong>
                </span>
            @enderror


@error('email')
               <span class="text-danger" >
                   <strong>{{ $message }}</strong>
                </span>
            @enderror


//retun in json response errors
//in controller
 $validator = \Validator::make($request->all(), [
               'first_name' => 'required',
          'last_name' => 'required',
          'username' => 'required|unique:users',
          'date_of_birth' => 'required',
          'email' => 'required|unique:users',
          'phone' => 'required',
          'password' => 'required',
               ]);
          
           if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
           }
