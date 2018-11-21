<?php
	include 'config.php';
	$data = $_POST['data'];
	$sql = "select * from culture_pedia LIMIT $data";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr>";
            echo  "<td>183</td>";
            echo  "<td>John Doe</td>";
            echo  "<td>11-7-2014</td>";
            echo  "<td>";
            echo  "<div class='btn-group'>";
            echo   "<button type='button' class='btn btn-info'>Action</button>";
            echo   "<button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>";
            echo   "<span class='caret'></span>";
            echo   "<span class='sr-only'>Toggle Dropdown</span>";
            echo   "       </button>";
            echo   "     <ul class='dropdown-menu' role='menu'>";
            echo   "       <li><a href='#'>Action</a></li>";
            echo   "       <li><a href='#'>Another action</a></li>";
            echo   "       <li><a href='#'>Something else here</a></li>";
            echo   "       <li class='divider'></li>";
            echo   "       <li><a href='#'>Separated link</a></li>";
            echo   "     </ul>
                  </div>
                </td>
                </tr>";
		}
	}else{
		echo "data kosong";
	}

?>