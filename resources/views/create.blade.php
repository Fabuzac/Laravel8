<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="">
        @csrf            
        <div class="d-flex pb-3">
            <img class="rounded-circle shadow p-1" src="https://i.pravatar.cc/60" alt="Profile picture">
            <p class="pl-3 text-dark"> says...</p>
        </div>

        <textarea class="w-100 textarea border-none" 
                  name="title" 
                  placeholder="A little title?"
                  maxlength="100"
                  required                
        ></textarea>

        <textarea class="w-100 textarea border-none" 
                  name="summary" 
                  placeholder="What topic?"
                  maxlength="100"
                  required                
        ></textarea>
    
        <textarea class="w-100 textarea border-none" 
                  name="body" 
                  placeholder="What would you like to express?"
                  maxlength="500"
                  required                
        ></textarea>
    
        <hr class="my-4" />
        <button type="submit" class="width-30 btn-dark shadow py-2 px-2 text-white btn-article rounded">Send</button>            
    </form>     
    
</body>
</html>