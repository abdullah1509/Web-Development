

<html>
<body bgcolor="#FFFFFF">
<%@  page errorPage="errorpage.jsp" language="java"  import="java.sql.*"  %>
<%!
    Connection con=null;
	ResultSet rs=null;
	PreparedStatement stat=null;
%>
<%
	String UserName=request.getParameter("uid");
	String Password=request.getParameter("pwd");
	String FirstName=request.getParameter("fname");
	String LastName=request.getParameter("lname");
	String Age=request.getParameter("age");
	String Sex=request.getParameter("sex");
	String Address=request.getParameter("address");
	String State=request.getParameter("state");
	String Country=request.getParameter("country");
	String Email=request.getParameter("email");
	String Contact=request.getParameter("contact");
	
	int flag=0;
	
	try
	{
		Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
		con =DriverManager.getConnection("jdbc:odbc:pd","",""); 
		stat= con.prepareStatement("Select * from User_Profile where Username=?" );
		stat.setString(1,UserName);
		rs = stat.executeQuery();
		if(rs.next())
		{
			flag=1;
			%>
			<jsp:forward page="Signup2.jsp"/>
			<%
		}
	}
	catch(Exception E)
	{
		out.println("Error  "+E);
	}
	if(flag == 0)
	{
		try
		{
          stat=con.prepareStatement("INSERT INTO User_Profile values(?,?,?,?,?,?,?,?,?,?,?)");
			stat.setString(1,UserName);
			stat.setString(2,Password);
			stat.setString(3,FirstName);
			stat.setString(4,LastName);	
			stat.setString(5,Age);
            stat.setString(6,Sex);
			stat.setString(7,Address);
			stat.setString(8,State);
			stat.setString(9,Country);
			stat.setString(10,Email);
			stat.setString(11,Contact);
         stat.executeUpdate();
		    
             	
		}
		catch(Exception E)
		{
			out.println("Error inserting value"+E);
		}	
		finally
		{
			rs.close();
			con.close();
			response.sendRedirect("Login.html");
		}
		
	}
	
%>
</body>
</html>
