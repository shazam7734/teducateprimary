<!DOCTYPE html>
<html>
<head>

</head>

<body>
    <h1> Please select your year group</h1>
        <form action="#">
            <label for="ks1group">Year Group:</label>
            <select id="ks1group" name="ks1group">
                <option value="ygroup">Year Group</option>
                <option value="one">Year 1</option>
                <option value="two">Year 2</option>
            </select>
            <input type="submit">
        </form>
    <h1> Training Course: [name]</h1>
    <h1> Survey Score: [value]</h1>
    <h1> Training Level: [Easy, Intermediate, Advanced (depending on value)]
    <h2> Can this page be dynamic, depending on which course button the user clicks and based on the survey results?</p>

    <h3>Tutorials</h3>
    <p>select from db turial1, tutorial2, tutorial3 where survey result value = ? 

    <h3>Instructions</h3>
    <p>select from db primary_instructions, secondary_instructions where survey result value = ? 
    
    <h3>Lesson Plans</h3>
    <p>select from db lesson where survey result value = ?
 
    