@extends('principal')
@section('title','contenido')
@section('conten')
    <template v-if="menu==1">
        <inicio-component :user="{{ Auth::user() }}"></inicio-component>
    </template>
    <template v-if="menu==0">
        <paciente-component></paciente-component>
    </template>
    <template v-if="menu==2">
        <h1>Contenido Calendario</h1>
    </template>
    <template v-if="menu==3">
        <perfil-component :user="{{ Auth::user() }}"></perfil-component>
    </template>
@endsection