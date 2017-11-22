<?php

Route::resource("clientes", "ClienteController");
Route::resource("proveedores", "ProveedorController");
Route::resource("libros", "LibroController");
Route::resource("stock", "StockController");
Route::resource("facturas", "FacturaController");
Route::get('facturas/{id}/detalle/add', 'FacturaController@detalleadd');
Route::post('facturas/{factura_id}/detalle/store', 'FacturaController@detalleaddstore');
Route::get('facturas/detalle/delete/{detalle_id}', 'FacturaController@detalledelete');


?>
