{{--
  <label>と<input>のセット（.form-groupは含まないため注意）
  必須変数: $name, $label
--}}

<?php
  //変数が指定されていなければデフォルトの値を入れる
  $type = isset($type) ? $type : 'text';
  $value = isset($value) ? $value : null;
  $classInput = isset($classInput) ? ['class' => 'form-control ' . $classInput] : ['class' => 'form-control'];
  //クラスを$attrInputと一緒にして適用
  $attrInput = isset($attrInput) ? array_merge($classInput, $attrInput) : $classInput;
?>

{!! Form::label($name, $label) !!}
@switch($type)
  @case('email')
    {!! Form::email($name, $value, $attrInput) !!}
    @break
  @case('password')
    {!! Form::password($name, $attrInput) !!}
    @break
  @default
    {!! Form::text($name, $value, $attrInput) !!}
@endswitch
