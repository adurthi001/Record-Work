<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body>
  <h2>Photo Sharing</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th rowspan ="2">src</th>
      <th rowspan ="2" >Description</th>
      <th rowspan ="2">Width</th>
      <th rowspan ="2">Height</th>
      <th rowspan ="2">Size</th>
      <th colspan ="2">USER</th>
    </tr>
    <tr>
       <th>Name</th>
       <th>Email</th>
       <th>Phone</th>
    </tr>
    <xsl:for-each select="photo">
    <tr>
      <td><xsl:value-of select="src"/></td>
      <td><xsl:value-of select="description"/></td>
      <td><xsl:value-of select="height"/></td>
      <td><xsl:value-of select="width"/></td>
      <td><xsl:value-of select="size"/></td>
     <xsl:for-each select="user">  
          <td><xsl:value-of select="name"/></td>
          <td><xsl:value-of select="email"/></td>
          <td><xsl:value-of select="phone"/></td>
     </xsl:for-each>  
    </tr>
     </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>

