<style>
    input {
    width: 98%;
    margin-left: 0.3%;
}
</style>
<h1>INSERT CATEGORY</h1>
<table border="1" width="80%" style="border-collapse: collapse">
    <form method="POST" action="modules/managerproduct/handling.php">
        
        <tr>
            <td>Category name</td>
            <td><input type="text" name="tendanhmuc" ></td>
        </tr>
        <tr>
            <td>Category Code</td>
            <td><input type="text" name="madanhmuc" ></td>
        </tr>
        <tr>
            
            <td colspan="2"><input type="submit" name="themdanhmuc" value="Insert category" ></td>
        </tr>
    </form>
    
</table>