 <form action="{{URL::to("update")}}" method="post" name="regform" id="regform">
     @csrf
      Id:<input type="text" name="id" value="{{$id}}"><br>
      Name:<input type="text" name="name" value="{{$name}}"><br>
      Fname:<input type="text" name="fname" value="{{$fname}}"><br>
      Mark1:<input type="text" name="mark1" value="{{$mark1}}"><br>
      Mark2:<input type="text" name="mark2" value="{{$mark2}}"><br>
      Mark3:<input type="text" name="mark3" value="{{$mark3}}"><br>
      <input type="submit" ><br>
 </form>
