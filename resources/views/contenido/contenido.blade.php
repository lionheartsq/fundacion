@extends('principal')
@section('contenido')

<template v-if="menu==0">
    <bienvenida></bienvenida>
</template>
<template v-if="menu==1">
    <residentes></residentes>
</template>
<template v-if="menu==2">
    <acudientes></acudientes>
</template>
<template v-if="menu==3">
    <usuarios></usuarios>
</template>

@endsection
