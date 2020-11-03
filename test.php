<div id="content">
<font face="Times New Roman, Times, serif">


<?php
    # Путь к файлу
    $file_name = "ads.txt";
    
    # Считываем информацию по строкам
    $data = file( $file_name );
?>
<table width="90%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="black">

   <p align="center" class="caption">

<h1 style="letter-spacing: 0.5cm">
</h1>
   
      </p>
        
      
  <tr bgcolor="gray">
    <th width="18%" bgcolor="gray" scope="col"><div align="center"><font color="#FFFFFF">Имя</font></div></th>
    <th width="69%" bgcolor="gray" scope="col"><div align="center"><font color="#FFFFFF">Количество странц</font></div></th>
    <th width="13%" bgcolor="gray" scope="col"><div align="center"><font color="#FFFFFF">Странциа</font></div></th>
  </tr>

  <?php
    $array = array(1, 4, 2, 5, 6);
    var_dump($array);
    $perevod = "Perevod <br> Perevod2";  
    echo ($array);
    SetCookie("Proizvolniy","Value", time()+60);
    # В цикле обходим массив данных
    foreach( $data as $value ):
        # Разбиваем строку по |
        $value = explode( "|", $value );
?>
    <tr>
        <td><?=$value[0]?></td>
        <td><?=$value[1]?></td>
        <td><?=$value[2]?></td>
    </tr>
<?php
    endforeach;
?>
</table>