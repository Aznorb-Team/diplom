@extends('layouts.layout')

@section('content')
<div class="container contact-form rounded-3">
    <form method="post">
        <h3>Заполнение заявки</h3>
       <div class="row">
            <div class="col-md-8">
                <div class="form-group mb-2">
                    <label for="name">Наименование</label>
                    <input type="text" name="name" class="form-control" placeholder="" value="" />
                </div>
                <div class="form-group mb-2">
                    <label for="exampleFormControlSelect1">Вид</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group mb-2">
                    <label for="exampleFormControlSelect1">Тип</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                <div class="form-group mb-2">
                    <label class="form-check-label" for="file">
                        Методический материал
                    </label>
                    <input type="file" name="file" class="form-control" placeholder="Ваш методический материал" value="" />
                </div>
                <div class="form-group mb-2">
                    <label class="form-check-label" for="recense1">
                        Рецензия 1
                    </label>
                    <input type="file" name="recense1" class="form-control" placeholder="Реценция 1" value="" />
                    <input class="recense1checkbox" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="recense1checkbox">
                        Отсутствует
                    </label>
                </div>
                <div class="form-group mb-2">
                    <label class="form-check-label" for="recense2">
                        Рецензия 2
                    </label>
                    <input type="file" name="recense2" class="form-control" placeholder="Реценция 2" value="" />
                    <input class="recense2checkbox" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="recense2checkbox">
                        Отсутствует
                    </label>
                </div>
                <div class="form-group mb-2">
                    <label class="form-check-label" for="recense3">
                        Рецензия 3
                    </label>
                    <input type="file" name="recense3" class="form-control" placeholder="Реценция 3" value="" />
                    <input class="recense3checkbox" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="recense3checkbox">
                        Отсутствует
                    </label>
                </div>
                <div class="form-group mb-2">
                    <label class="form-check-label" for="kafedra">
                        Выписка из заседания кафедры
                    </label>
                    <input type="file" name="kafedra" class="form-control" placeholder="Реценция 3" value="" />
                    <input class="kafedracheckbox" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="kafedracheckbox">
                        Отсутствует
                    </label>
                </div>
                <div class="form-group mb-2">
                    <label>Направление</label>
                    <select class="form-select" multiple aria-label="пример множественного выбора">
                        <option selected>Откройте это меню выбора</option>
                        <option value="1">Один</option>
                        <option value="2">Два</option>
                        <option value="3">Три</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label>Авторы</label>
                    <select class="form-select" multiple aria-label="пример множественного выбора">
                        <option selected>Откройте это меню выбора</option>
                        <option value="1">Один</option>
                        <option value="2">Два</option>
                        <option value="3">Три</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Отправить на рассмотрение" />
                </div>
                
            </div>
        </div>
    </form>
    
</div>
@endsection