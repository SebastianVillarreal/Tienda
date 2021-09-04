function InsertGasto(monto, proveedor) {
    var url = "../Network/Pagos/Insert.php";
    fetch(url,{
        method: 'POST',
        headers: {
            "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
        },

        //body: $('#frmDatos').serialize()
        body: JSON.stringify({
            "proveedor": proveedor,
            "total": monto
        })
    })
    .then(function(response){
        return response.json().then(function (text){
          //alertify.success("Proveedor Asignado");
          alert("Registrado");
          location.reload();

        });
    });
}