<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="text" encoding="iso-8859-1"/>

<xsl:strip-space elements="*" />
<xsl:preserve-space elements="td" />

<xsl:template match="//thead/tr[@class='bgblue']">
<xsl:for-each select="th[@scope='col']"><xsl:value-of select="."/><xsl:if test="position() != last()">,</xsl:if></xsl:for-each>
<xsl:text>&#xa;</xsl:text>
</xsl:template>

<xsl:template match="//tr[@class='row0' or @class='row1']">
<xsl:for-each select="td"><xsl:value-of select="."/><xsl:if test="position() != last()">,</xsl:if></xsl:for-each>
<xsl:text>&#xa;</xsl:text>
</xsl:template>

<xsl:template match="text()"/>

</xsl:stylesheet>