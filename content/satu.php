					<div class="product-status-wrap">
					        <h4>Products List <img class="main-logo" src="img/logo/list.png" alt="" /></h4>
                            <div class="add-product">
                                <a href="index2.php?isi=add-product">Add Product</a>
                            </div>
							  
                            <table>
                                
								
                                    <th>Id</th>
                                    <th>Warna Barang</th>
									<th>Harga</th>
									<th>Jumlah</th>
                                   	<th>Image</th>
                                   
                                
								<?php
								include "koneksi.php";
								$tampilkan = mysqli_query($koneksi,"SELECT * FROM product_edit");
								while($r = mysqli_fetch_array($tampilkan)){
								?>
								
								
                                <tr>
                                    <td><?php echo $r['id_barang']?></td>
                                    <td><?php echo $r['warna_barang']?></td>
									<td><?php echo $r['harga']?></td>
									<td><?php echo $r['jumlah']?></td>
									<td><img src="img/<?php echo $r['gambar'];?>" height="50"></td>
									
                                   <td>
										<a href="index2.php?isi=edit-product&id=<?php echo $r['id_barang'];?>"class="btn btn-warning">Edit</a>
										<a href='delete.php?id=<?php echo $r['id_barang'];?>' onclick="return confirm('apakah anda akan menghapus data ?')"class="btn btn-danger">Hapus</td>
										<?php
										

										}
										?>
                                    </td>
                                </tr>
                            
						
						</table>
						
						</div>
