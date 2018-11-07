<?php require_once "api/index.php"; ?>
<form class="addr" action="" method="post">

  <div class="row">

    <div class="col">
      <div class="form-group">
        <label>Име:</label>
        <input class="form-control" type="text" name="fname" required>
      </div>
    </div>

    <div class="col">

      <div class="form-group">
        <label>Фамилия:</label>
        <input class="form-control" type="text" name="fname">
      </div>

    </div>

  </div>

  <div class="row">

    <div class="col">
      <div class="form-group">
        <label>Настаняване</label>
        <input class="form-control" id="date" min="2018-06-12" type="date">
      </div>
    </div>

    <div class="col">

      <div class="form-group">
        <label>Напускане</label>
        <input class="form-control" id="date" type="date">
      </div>

    </div>

  </div>

  <div class="row">

    <div class="col">
      <div class="form-group">
        <label>Апартамент:</label>
        <select id="apartSelect" class="form-control">
        <?php getApart(); ?>
      </select>
      </div>
    </div>

    <div class="col">

      <div class="form-group">
        <label>Агенция</label>
        <select class="form-control">
          <?php getWorkWith(); ?>
        </select>
      </div>

    </div>

  </div>


  <div class="row">

    <div class="col">

      <div class="form-group">
        <label>Възрастни</label>
        <select class="form-control">
          <option value=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
      </div>

    </div>

    <div class="col">

      <div class="form-group">
        <label>Деца 6/12</label>
        <select class="form-control">
          <option value=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
      </div>

    </div>

    <div class="col">

      <div class="form-group">
        <label>Деца под 6</label>
        <select class="form-control">
          <option value=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
      </div>

    </div>

  </div>


  <div class="row">

    <div class="col">
      <div class="form-group">
        <label>Цена:(лв)</label>
        <input id='priceInput' class="form-control" type="text" name="pnumber" >
      </div>
    </div>



    <div class="col">

      <div class="form-group">
        <label>Отстъпка:</label>
        <input class="form-control" type="text" name="pnumber" >
      </div>

    </div>

    <div class="col">

      <div class="form-group">
        <label>Фирма</label>
        <select class="form-control">
          <option value=""></option>
        </select>
      </div>

    </div>

  </div>

  <label for="">Допълнителни опции:</label>
<div class="row">

  <div class="col">
    <div class="form-group">
      <input type="checkbox" id="parking" onclick="toggleParkingInput()" name="parking" value="parking">
      <label for="parking">Паркинг</label>
    </div>
  </div>


  <div class="col">
    <div class="form-group">
      <label>Номер:</label>
      <input class="form-control" id="pnumber" type="text" name="pnumber" disabled >
    </div>

  </div>
</div>

<div class="row">

  <div class="col">
    <div class="form-group">
      <input type="checkbox" id="deposit" onclick="toggleDepositInput()" name="deposit" value="deposit">
      <label for="deposit">Капаро</label>
    </div>
  </div>


  <div class="col">
    <div class="form-group">
      <label>Сума:</label>
      <input class="form-control" id="dnumber" type="text" name="dnumber" disabled >
    </div>

  </div>
</div>

<div class="row">

  <div class="col">
    <div class="form-group">
      <input type="checkbox" id="breakfast" name="breakfast" value="breakfast">
      <label for="breakfast">Закуска</label>
    </div>
  </div>


  <div class="col">
    <div class="form-group">
      <input type="checkbox" id="authorizations" name="authorizations" value="authorizations">
      <label for="authorizations">Авторизация</label>
    </div>
  </div>

  <div class="col">
    <div class="form-group">
      <input type="checkbox" id="vc" name="vc" value="vc">
      <label for="vc">Виртуална карта</label>
    </div>
  </div>

  <div class="col">
    <div class="form-group">
      <input type="checkbox" id="prepaid" name="prepaid" value="prepaid">
      <label for="prepaid">Предплатено</label>
    </div>
  </div>


  <div class="col">
    <div class="form-group">
      <input type="checkbox" id="sofa" name="sofa" value="sofa">
      <label for="sofa">Диван</label>
    </div>
  </div>

</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="description">Допълнително описаание</label>
      <textarea class="form-control" id="description" rows="3"></textarea>
    </div>
  </div>

</div>

<button type="submit" class="btn btn-primary">Добави</button>
</form>

<script type="text/javascript" src="js/formAction.js"></script>
