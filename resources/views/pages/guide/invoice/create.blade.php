<?php 

$form = new Form();
$formBox = $form->create()

    // set From
    ->elem('div')->addClass('form-insert')->style('horizontal')

 ->field("name")
        ->label( 'ชื่อ*' )
        ->autocomplete('off')
        ->addClass('form-control')
        ->maxlength(175)
        ->attr('aria-label', 'required')
        ->value( !empty($data->name)? $data->name:'' )

        ->html();

?>        
@extends('layouts.admin')

@isset( $title )
@section('title', $title)
@endisset

@section('content')

    <form method="post" action="/api/v1/guide/invoice" class="container mt-5" data-plugin="GuideInvoiceForm">
        @csrf
        <h1 class="mb-3">ใบสำศัญจ่าย</h1>
        <?=$formBox?>


        <table>
            <tr>
                <td>รายการ</td>
                <td colspan="2"></td>
                
                <td></td>
            </tr>
            <tb
            <tr>
                <td></td>
                <td></td>
                <td></td>

                <td></td>
            </tr>
        <table>
    </form>
@endsection