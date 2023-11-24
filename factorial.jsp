<html>
<body>
<%
   long n, result;
   String str;
   
   long fact(long n){
        if(n=0)
            return 1;
        else
            return n*fact(n-1);
}
%>
<%
   str = request.getparameter("val")
   n = Long.parseLong(str);
   result = fact(n-1);
%>
<b>Factorial value: </b> <%= result %>
</body>
</html>
