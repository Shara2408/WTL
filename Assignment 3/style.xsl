<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:template match="/">
 <html>
<head>
<title>Contact Information</title>
<link rel="stylesheet" type="text/css" href="student.css"/>
</head>
<body>
 <h2>Contact Information</h2>
<table border="1">
<tr>
 <th>Name</th>
<th>College</th>
<th>Mobile</th>
 <th>Category</th>
 </tr>
<xsl:for-each select="contactinfo/address">
<tr>
 <td><xsl:value-of select="name"/></td>
<td><xsl:value-of select="College"/></td>
<td><xsl:value-of select="mobile"/></td>
<td><xsl:value-of select="category"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
