<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" >

    <xsl:template match="/courses">
        <html>
            <head>
                <script type="text/javascript">


    function addDisplay(details){
        document.write(details);
    }

                </script>
            </head>
            <body>
                <table border="1">
                    <tr>
                        <th>Course Nu</th>
                        <th>Course Title</th>
                        <th>Prof</th>
                        <th>Year</th>
                        <th>Days</th>
                        <th>Time</th>
                        <th>Location</th>
                    </tr>
<!--TODO for each professors name as well-->

                <xsl:for-each select="course[@acad_year >= 2003]">
                    <tr>
                        <td><xsl:value-of select="course_num" /></td>

                        <xsl:variable name="course_info" select="description"/>
                        <td>
                            <a href='#' onclick="addDisplay('{$course_info}')">
                                <xsl:value-of select="title" />
                            </a>
                        </td>

                        <td>
                            <xsl:for-each select="course_head/person">
                                <xsl:value-of select="person_name" />
                                <xsl:if test="position() != last()">
                                    <xsl:text>,</xsl:text>
                                </xsl:if>
                            </xsl:for-each>
                        </td>

                        <td><xsl:value-of select="@acad_year"/></td>
                        <td><xsl:value-of select="meeting/meeting_days"/></td>
                        <td><xsl:value-of select="meeting/meeting_begin"/> - <xsl:value-of select="meeting/meeting_end" /></td>
                        <td><xsl:value-of select="meeting/location"/></td>
                    </tr>
                </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>