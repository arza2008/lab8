<!DOCTYPE html>
<html lang="en">
<head>
    <title>A Survey For UPM Academics</title>
    <h1> Rapid Survey on R&D Discipline in UPM.</h1>
    <p> Deputy Vice Chansellor Office (Research and Innovation) </p>
    <a href="https://analytics.upm.edu.my/info" class="btn btn-info">
        <button type="button"> Learn More</button></a><br><br>

    <!-- CSS And JavaScript -->
</head>

<style> table, th, td{
        border: 1px solid black;
        border-collapse:collapse;
    }
    th, td{
        padding:  5px;
        text-align:left;
    }</style>
<body>

<center><form>
        <table style="width:100%">
            <tr>
                <th>Staff ID * </th>
                <td><input type="int" name="staffid"></td>
            </tr>
            <br>
            <tr>
                <th>Author Names * :</th>
                <td><input type="text" name="authorname"></td>
            </tr>
            <br>
            <tr>
                <th>Fields of Reasearch (FOR) * </th>
                <td><select name="FOR">
                        <option value ="Accounting Education"> Accounting Education</option>
                        <option value ="Chemometrics"> Chemometrics</option>
                        <option value ="Family law"> Family law</option>
                    </select>
                </td>
            </tr>
            <br>
            <tr>
                <th>Socioeconimic Objective (SEO) * </th>
                <td><select name="SEO">
                        <option value ="Defence"> Defence</option>
                        <option value ="Food Security"> Food Security</option>
                        <option value ="Agricultural Chemicals"> Agricultural Chemicals</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Comments : </th>
                <td><input type="text" name="comments"> </td>
            </tr>

        </table>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6"><br>
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Submit </button>
                <button type="submit" class="btn-default">
                    <i class="fa fa-plus"></i> Clear</button>
            </div>
        </div>
        <br>

    </form></center>

<div class="container">
    <nav class="navbar navbar-default">
        <!-- Navbar Contents -->
    </nav>
</div>

</body>
</html>