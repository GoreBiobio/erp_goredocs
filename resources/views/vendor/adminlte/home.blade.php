@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-folder-open"></i>

                    <h3 class="box-title">Ingresar Documento a Trámite</h3>
                </div>
                <div class="box-body pad table-responsive">
                    <p>Seleccione el tipo de documento a tramitar <code><i class="fa fa-flag-o"></i> GOREDocs</code></p>
                    <p><code>DIVISIÓN DE ANÁLISIS Y CONTROL DE LA GESTIÓN (DACG)</code></p>
                    <p><code>DIVISIÓN DE PLANIFICACIÓN Y DESARROLLO (DIPLADE)</code></p>
                    <p><code>DIVISIÓN DE ADMINISTRACIÓN Y FINANZAS (DAF)</code></p>
                    <table class="table table-bordered text-center">
                        <tbody>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn flat">Circular</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Boleta de Garantía
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Documentos Varios
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Carta</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Licencias Médicas
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Descanso
                                    Complementario
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Administrativos
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn flat">Feriados</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Cometidos</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Sobre Cerrado</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Facturas</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Ingreso Garantias
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Solicitud de Pago
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Oficio Ordinario
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn flat">Decreto Exento</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Resolución Exenta
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Solicitud de
                                    Condonación
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Refrendación</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Copia Informativa
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Consulta</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Solicitud de
                                    Información
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn flat">Informe Contable
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Resolución</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Decreto</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">D.F.L.</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">LEY</button>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.col -->
    </div>

@endsection
