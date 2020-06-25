form name="form1" action="calc.php" method="POST" autocomplete="off">
  <h2 align='center'><b><u>CALCULATOR</u></b></h2>
    <table align="center" width="40%"  height="40%" border="1" cellpadding="0"cellspacing="0" >

    <tr>
    <td> <h4>FIRST NUMBER</h4></td>
    <td><input type="text" name="value1" style="width:100%;box-sizing:border-box;height:100%" /></td>
    </tr>
    <tr>
    <td><h4>SECOND NUMBER</h4></td>
    <td><input type="text" name="value2" style="width:100%;box-sizing:border-box;height:100%" /></td>
    </tr>
    <tr>
    <td><h4>RESULT</h4></td>
    <td><input type="text" name="result"   style="width:100%;box-sizing:border-box;height:100%"  value="<?php 
    echo $result;?>"/>
    </td>
    </tr>
    
    
  <tr><td colspan="2" align='center' height="150%">
  <input  type="submit" class="button" name="addition" value="+" style="width:30%;height:30%;box-sizing:border-box;font-size:15px" />
    <input type="submit" class="button" name="substraction" value="-" style="width:30%;height:30%;box-sizing:border-box;font-size:15px"/>
    <input type="submit" class="button" name="multiplication" value="*" style="width:30%;height:30%;box-sizing:border-box;font-size:15px"/>
    <input type="submit" class="button" name="division" value="/" style="width:30%;height:30%;box-sizing:border-box;font-size:15px"/>
    <input type="submit"  class="button" name="modulus" value="%"style="width:30%;height:30%;box-sizing:border-box;font-size:15px"/>
    <input type="submit"  class="button" name="clear" value="clear"style="width:30%;height:30%;box-sizing:border-box;font-size:15px"/>
   </td> 
    </tr>
    </table>
   
    </form>