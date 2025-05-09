<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
               <title>Student Results</title>
                <style>
                    table {border-collapse: collapse; width: 60%; margin: 20px;}
                    th, td {border: 1px solid black; padding: 10px; text-align: left;}
                    th {background-color: #f2f2f2;}
                    .pass {color: green; font-weight: bold;}
                    .fail {color: red; font-weight: bold;}
                </style>
            </head>
            <body>
                <h2>Student Results</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Marks</th>
                        <th>Status</th>
                    </tr>
                    <xsl:for-each select="students/student">
                        <tr>
                            <td><xsl:value-of select="id"/></td>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="subject"/></td>
                            <td><xsl:value-of select="marks"/></td>
                            <td>
                                <xsl:choose>
                                    <xsl:when test="marks &gt;= 40">
                                        <span class="pass">Pass</span>
                                    </xsl:when>
                                    <xsl:otherwise>
                                        <span class="fail">Fail</span>
                                    </xsl:otherwise>
                                </xsl:choose>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
 