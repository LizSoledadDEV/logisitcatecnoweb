<style type="text/css">
    body {
        font-family: "Nunito", sans-serif;
    }

    .tg {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%
    }

    .tg td {
        font-family: Arial, sans-serif;
        font-size: 14px;
        overflow: hidden;
        padding: 5px 5px;
        word-break: normal;
    }

    .tg th {
        border-color: rgb(146, 146, 146);
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 5px 5px;
        word-break: normal;
    }

    .tg .tg-0pky {
        border-color: inherit;
        text-align: left;
        vertical-align: top
    }

    table {
        font-family: "Nunito", sans-serif;
    }

    .app-logo {
        width: 70px;
        margin-top: -70px;
    }

    .text-head-middle {
        text-align: center !important;
        padding-left: 30px;
    }

    .app-name {
        font-size: 25px
    }

    .text-head-legend {
        font-size: 9px;
        line-height: 5px;
    }

    .informe-head-legend {
        font-size: 20px;
        font-weight: bold;
        margin-top: 15px;
    }

    .table-student {
        margin-top: 5px;
        width: 100%;
        border-color: #6b6b6b;
        border-width: 1px;
        border-style: solid;
        padding: 10px 5px;
        border-radius: 7px;
    }

    .info-student {
        font-size: 14px
    }

    .table-marks {
        margin-top: 20px
    }

    .head-table {
        font-weight: bold;
        font-size: 15px;
        background-color: #dc3545;
    }

    .subject {
        font-size: 15px;
        font-weight: bold;
    }

    .teacher {
        font-size: 13px;
    }

    .assistance {
        font-size: 10px;
    }

    .text-performance {
        font-size: 11px
    }

    .subject-box {
        border-top: 1px solid rgb(133, 133, 133);
    }

    .performance-box {
        border-bottom: 1px solid rgb(133, 133, 133);
        margin-bottom: 10px;
    }

    .padding-box {
        margin-top: 10px;
        padding-top: 10px;
    }

    .table-marks {
        border-width: 1px;
        border-style: solid;
        border-color: rgb(133, 133, 133);
        border-radius: 7px !important;
    }

    .rank-table {
        margin-top: 5px;
    }

    .rank-table td {
        background-color: #9b9b9b;
        border-style: solid;
        border-width: 1px;
        border: 1px;
        text-align: center;
        padding: 7px 7px;
    }

    .text-bold {
        
    }
</style>

<div>
    <h2>TRANSPORTE DELGAS S.R.L</h2>
</div>

        <table class="tg table-marks">
            <tbody>
                <tr class="subject-box padding-box">
                    <td class="tg-0pky subject-parent subject-box" colspan="6">
                        <div class="teacher">
                            Reporte:
                        </div>
                    </td>
                    <td class="tg-0pky subject-box" colspan="3">
                        <div class="mark">
                            Pago del Conductor
                        </div>
                    </td>
                </tr>
                <tr class="subject-box padding-box">
                    <td class="tg-0pky subject-parent subject-box" colspan="6">
                        <div class="teacher">
                            Conductor:
                        </div>
                    </td>
                    <td class="tg-0pky subject-box" colspan="3">
                        <div class="mark">
                            {{ $chofer->name }}
                        </div>
                    </td>
                </tr>
                <tr class="subject-box padding-box">
                    <td class="tg-0pky subject-parent subject-box" colspan="6">
                        <div class="teacher">
                            Direccion:
                        </div>
                    </td>
                    <td class="tg-0pky subject-box" colspan="3">
                        <div class="mark">
                            {{ $chofer->email }}
                        </div>
                    </td>
                    <tr class="subject-box padding-box">
                        <td class="tg-0pky subject-parent subject-box" colspan="6">
                            <div class="teacher">
                                Telefono:
                            </div>
                        </td>
                        <td class="tg-0pky subject-box" colspan="3">
                            <div class="mark">
                                {{ $chofer->telefono }}
                            </div>
                        </td>
                    </tr>
                    <tr class="subject-box padding-box">
                        <td class="tg-0pky subject-parent subject-box" colspan="6">
                            <div class="teacher">
                                Fecha de informe:
                            </div>
                        </td>
                        <td class="tg-0pky subject-box" colspan="3">
                            <div class="mark">
                                {{ date("Y-m-d") }}
                            </div>
                        </td>
                    </tr>
                    <tr class="subject-box padding-box">
                        <td class="tg-0pky subject-parent subject-box" colspan="6">
                            <div class="teacher">
                                Informe desde:
                            </div>
                        </td>
                        <td class="tg-0pky subject-box" colspan="3">
                            <div class="mark">
                                {{ $desde }}
                            </div>
                        </td>
                    </tr>
                    <tr class="subject-box padding-box">
                        <td class="tg-0pky subject-parent subject-box" colspan="6">
                            <div class="teacher">
                                Informe hasta:
                            </div>
                        </td>
                        <td class="tg-0pky subject-box" colspan="3">
                            <div class="mark">
                                {{ $hasta }}
                            </div>
                        </td>
                    </tr>
                    <tr class="subject-box padding-box">
                        <td class="tg-0pky subject-parent subject-box" colspan="6">
                            <div class="teacher">
                                
                            </div>
                        </td>
                        <td class="tg-0pky subject-box" colspan="3">
                            <div class="mark">
                                
                            </div>
                        </td>
                    </tr>
                </tr>
            </tbody>
            <br>
            <br>
            <tbody>
                {{-- <tr>
            <td class="tg-0pky head-table" colspan="6">URL</td>
            <td class="tg-0pky head-table" colspan="3">Cantidad</td>
            <td class="tg-0pky head-table" colspan="3">Ultima Visita</td>
        </tr> --}}
                
                @if ($cargasRango->count() > 0)
                    @foreach ($cargasRango as $carga)
                        <tr class="subject-box padding-box">
                            <td class="tg-0pky subject-parent subject-box" colspan="6">
                                <div class="teacher">
                                    <b>#Carga:</b> 
                                </div>
                            </td>
                            <td class="tg-0pky subject-box" colspan="3">
                                <div class="mark">
                                    <b>{{ $carga->fecha_actual }}</b>
                                </div>
                            </td>
                        </tr>
                        <tr class="subject-box padding-box">
                            <td class="tg-0pky subject-parent subject-box" colspan="6">
                                <div class="teacher">
                                    Recoger:
                                </div>
                            </td>
                            <td class="tg-0pky subject-box" colspan="3">
                                <div class="mark">
                                    {{ $carga->fecha_salida }}
                                </div>
                            </td>
                        </tr>
                        <tr class="subject-box padding-box">
                            <td class="tg-0pky subject-parent subject-box" colspan="6">
                                <div class="teacher">
                                    Entrega:
                                </div>
                            </td>
                            <td class="tg-0pky subject-box" colspan="3">
                                <div class="mark">
                                    {{ $carga->fecha_recogida }}
                                </div>
                            </td>
                        </tr>
                        <tr class="subject-box padding-box">
                            <td class="tg-0pky subject-parent subject-box" colspan="6">
                                <div class="teacher">
                                    Pago Adicional:
                                </div>
                            </td>
                            <td class="tg-0pky subject-box" colspan="3">
                                <div class="mark">
                                    {{ $carga->otros_cargos }}
                                </div>
                            </td>
                        </tr>
                        <tr class="subject-box padding-box">
                            <td class="tg-0pky subject-parent subject-box" colspan="6">
                                <div class="teacher">
                                    Total Parcial:
                                </div>
                            </td>
                            <td class="tg-0pky subject-box" colspan="3">
                                <div class="mark">
                                    {{ $carga->tasa_transporte +  $carga->descarga + $carga->detencion}}
                                </div>
                            </td>
                        </tr>
                        <tr class="subject-box padding-box">
                            <td class="tg-0pky subject-parent subject-box" colspan="6">
                                <div class="teacher">
                                    Notas:
                                </div>
                            </td>
                            <td class="tg-0pky subject-box" colspan="3">
                                <div class="mark">
                                    {{-- {{ $carga->tarifa_total }} --}}
                                </div>
                            </td>
                        </tr>
                        <tr class="performance-box">
                            <td class="tg-0pky performance-box" colspan="12">
                                <div class="text-performance">
                                    {{-- {{ $user->name }} {{ $user->apellido }}</div> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <h5>Derechos Reservados a <i>TECNOLOGIA WEB</i></h5>
