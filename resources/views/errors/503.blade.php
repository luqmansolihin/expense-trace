@extends('errors.layout')

@section('code', '503')
@section('title', 'Sistem Dalam Pemeliharaan')

@section('icon', 'fa-solid fa-screwdriver-wrench')
@section('icon-bg', 'bg-teal-500/10 border-teal-500/20 text-teal-400')
@section('code-gradient', 'from-teal-400 to-emerald-400')
@section('btn-gradient', 'from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500')

@section('message', 'Sistem ExpenseTrace saat ini sedang dalam proses pemeliharaan rutin (*maintenance mode*). Silakan kembali dalam beberapa menit.')
