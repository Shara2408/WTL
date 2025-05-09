<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Employee Details</title>
                <style>
                    table {border-collapse: collapse; width: 70%; margin: 20px; font-family: Arial, sans-serif;}
                    th, td {border: 1px solid black; padding: 10px; text-align: left;}
                    th {background-color: #f2f2f2;}
                </style>
            </head>
            <body>
                <h2>Employee Details</h2>
                
                <p>Total Employees: <xsl:value-of select="count(employees/employee)"/></p>

                <table>
                    <tr>
                        <th>Name</th>
                        <th>ID</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Salary</th>
                    </tr>
                    <xsl:for-each select="employees/employee">
                        <tr>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="id"/></td>
                            <td><xsl:value-of select="designation"/></td>
                            <td><xsl:value-of select="department"/></td>
                            <td><xsl:value-of select="salary"/></td>
                        </tr>
                    </xsl:for-each>
                </table>

                
                <p>Average Salary: 
                    <xsl:value-of select="sum(employees/employee/salary) div count(employees/employee)"/>
                </p>

           
                <h3>Employees in IT Department:</h3>
                <ul>
                    <xsl:for-each select="employees/employee[department='IT']">
                        <li><xsl:value-of select="name"/></li>
                    </xsl:for-each>
                </ul>

            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
