 <form action="{{URL::to("save")}}" method="post" name="regform" id="regform">
     @csrf
      Name:<input type="text" name="name"><br>
      Fname:<input type="text" name="fname"><br>
      Mark1:<input type="text" name="mark1"><br>
      Mark2:<input type="text" name="mark2"><br>
      Mark3:<input type="text" name="mark3"><br>
      <input type="submit" ><br>
 </form>
