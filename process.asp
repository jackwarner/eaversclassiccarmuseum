<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>newsletter</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<%function sendASPQMail()

dim mailer, f, strMsgHeader, i, strMsgInfo, strMsgBody, strMsgFooter

set f = request.form

Set Mailer = Server.CreateObject("SMTPsvg.Mailer")
Mailer.QMessage = true
Mailer.FromName   = "Web Tide Studios Newsletter"
Mailer.FromAddress= "service@webburner.com"
Mailer.RemoteHost = "mail.webtidestudios.com"
'Mailer.AddRecipient "Jim Burke", "jim.burke@coors.com"
Mailer.AddRecipient "Eavers Classic Car Museum", "jwarner@webtidestudios.com"
Mailer.Subject    = "Request for Newsletter"
Mailer.BodyText   = "An request for the newsletter has been submitted on " & Date & vbnewline
'Collect form contents for up to 128 form fields
'@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

strMsgHeader = "Form Information Follows (courtesy of Web Tide Studios Hosting and Web Design)" & vbCrLf & "-----------------------------" & vbCrLf
for i = 1 to Request.Form.Count
  'Response.Write "Count " & i & " Total " & f.Count
  if Len(Request.Form.Key(i)) > 0 then
  strMsgInfo = strMsgInfo & Request.Form.Key(i) & ":  " &  Request.Form.Item(i) & vbCrLf
  end if
next
strMsgFooter = "-----------------------------" & vbCrLf & "End of form information"
Mailer.BodyText = strMsgHeader & strMsgInfo & strMsgFooter

'@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

if Mailer.SendMail then
  Response.Write ""
else
  Response.Write "Mail send failure. Error was " & Mailer.Response
end if

end function
%> <%
call sendASPQmail
%> 
<body bgcolor="#000000" text="#FFFFFF" link="#FF0000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="435" border="0" align="center" cellpadding="2">
  <tr> 
    <td height="100%"><div align="center"><img src="images/newsletter_title.gif" width="200" height="35"></div></td>
  </tr>
  <tr> 
    <td height="100%"> 
      <blockquote>
<div align="left">
          <p><font color="#FFFFFF" size="3" face="Arial, Helvetica, sans-serif">Thank 
            you for your interest! Enjoy the rest of your visit...</font></p>
        </div>
      </blockquote></td>
  </tr>
</table>
</body>
</html>
