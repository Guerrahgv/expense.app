<?php
    $categories = $this->d['categories'];
?>


<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/expense.css">


<form class="form-expense-container" id="form-expense-container" action="expenses/newExpense" method="POST">
    <h3>Registrar nuevo gasto</h3>
    <div class="section">
        <label for="amount"><strong>Cantidad</strong></label>
        <input type="number" name="amount" id="amount" autocomplete="off" value="1" required min="1" max="999999999" pattern="^[1-9][0-9]{0,8}$">

    </div>
    <div class="section text__area">
        <label for="title"><strong>Descripción</strong></label>
        <div><input id="text__area" type="text" name="title" autocomplete="off" required
           placeholder="Ingrese descripción del gasto.."
           pattern="^(?!\s)(?=\S)(?!.*\s$)[a-zA-Z]{10,40}$"></div>
    </div>
    
    <div class="section">
        <label for="date"><strong>Fecha de gasto</strong></label>
        <input type="date" name="date" required min="<?php echo date('2023-01-01'); ?>">
    </div>    

    <div class="section">
        <label for="categoria"><strong>Categoria        </strong></label>
            <select name="category" id="" required>
            <?php 
                foreach ($categories as $cat) {
            ?>
                <option value="<?php echo $cat->getId() ?>"><?php echo $cat->getName() ?></option>
                    <?php
                }
            ?>
            </select>
    </div>    

    <div class="center">
        <input type="submit" value="Nuevo expense">
    </div>
</form>