<form action="<?php echo base_url(); ?>/mandarPost" method="post"> 
		<label>Calculadora</label>
		<br>
		<input type="number" min="1" pattern="^[0-9]+" name="valor1" >
		<br>
		<input type="number" min="1" pattern="^[0-9]+" name="valor2" >
		<br>
        <select name="op">
            <option value="suma" selected>Suma</option> 
            <option value="resta">Resta</option>
            <option value="mult">Multiplicación</option>
            <option value="div">División</option>
        </select>
        <br>
		<button>Enviar datos</button>
</form>