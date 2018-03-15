<html>
<head>
	<title>Currency</title>
</head>
<body>
	<form method="post" action="updatecurrency" enctype="multipart/form-data">
              
                    {{ csrf_field() }}
                      
                    <label for="pwd">Amount</label>
                    
                      <input type="text" class="form-control" name="abouttext" maxlength="300">
              
               
                    <label for="pwd">From</label>
                      <select name="currfrom">
                      <option value="none"></option>  
                       @foreach($data2 as $values)
                      <option value="{{$values->currency}}">{{$values->currency}}</option>
                       @endforeach
                      </select>
                    <label for="pwd">To</label>
                      <select name="currto">
                       <option value="none"></option>  
                       @foreach($data2 as $values)
                      <option value="{{$values->currency}}">{{$values->currency}}</option>
                       @endforeach
                      </select>
              
     				<button type="submit">convert</button>
  
    </form>
</body>
</html>



