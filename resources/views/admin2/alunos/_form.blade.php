<div class="input-field">
  <input type="text" name="nome" value="{{isset($linha->nome) ? $linha->nome : ''}}">
  <label>Nome</label>
</div>

<div class="input-field">
  <input type="text" name="ra" value="{{isset($linha->ra) ? $linha->ra : ''}}">
  <label>RA</label>
</div>

<div class="input-field">
  <input type="text" name="data_nasc" value="{{isset($linha->data_nasc) ? $linha->data_nasc : ''}}">
  <label>Data Nascimento</label>
</div>

<div class="input-field">
  <input type="text" name="celular" value="{{isset($linha->celular) ? $linha->celular : ''}}">
  <label>Celular</label>
</div>

<div class="input-field">
  <input type="text" name="email" value="{{isset($linha->email) ? $linha->email : ''}}">
  <label>Email</label>
</div>


<div class="file-field  input-field">
  <div class="btn blue">
    <span>Imagem</span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">

  </div>
</div>

@if(isset($linha->imagem))
<div class="input-field">
  <img width="25" height="30" src="{{asset($linha->imagem)}}" />
</div>
@endif