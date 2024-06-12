<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0" encoding="UTF-8">
<xsl:template match="/">
<html>
<body>
<table border="1">
<tr bgcolor="#9acd32">
<th style="text-align:center">ISBN</th>
<th style="text-align:center">Naslov</th>
<th style="text-align:center">Stanje</th>
<th style="text-align:center">Čitano</th>
</tr>
<xsl:for-each select="biblioteka/knjiga">
<xsl:sort order="descending" select="citano"/>
<tr>
<td style="text-align:center">
<xsl:value-of select="@ISBN"/>
</td>
<td style="text-align:center">
<xsl:value-of select="naslov"/>
</td>
<td style="text-align:center">
<xsl:value-of select="stanje"/>
</td>
<td style="text-align:center">
<xsl:value-of select="citano"/>
</td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>