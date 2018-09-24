@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Inicio
@endsection

@section('main-content')


    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-folder-open"></i>
                    <h3 class="box-title">Ingresar Documento a Trámite - XXXX</h3>
                </div>
                <div class="box-body">
                    <form role="form" action="/Documento/Ingreso" method="POST" files=”true”
                          class="form-horizontal"
                          enctype="multipart/form-data">
                        <!-- Input Privado -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <p><strong><code>I.- Información General del Ingreso al Sistema</code></strong></p>
                        <div class="form-group">
                            <div class="col-md-2">
                                <label>Origen de Datos</label>
                                <select class="form-control" name="origen_datos">
                                    <option value="">FUNCIONARIOS</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label>Emisor</label>
                                <select class="form-control" name="datos">
                                    <option value="">GUTIÉRREZ FARIÑA, DANIEL ESTEBAN</option>
                                    <option value="">BASTIAS ORELLANA, LEONARDO</option>
                                </select>
                            </div>


                        </div>
                        <hr>
                        <!-- text input -->
                        <p><strong><code>II.- Información del Documento</code></strong></p>
                        <div class="form-group">
                            <div class="col-md-2">
                                <label for="nombres">Fecha del Documento</label>
                                <input type="date" class="form-control" name="fecha_documento" required>
                            </div>

                            <div class="col-md-2">
                                <label for="nombres">Materia</label>
                                <select class="form-control" name="datos">
                                    <option value="">LICENCIA MEDICA</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="nombres">Confidencialidad</label>
                                <select class="form-control" name="datos">
                                    <option value="">PÚBLICO</option>
                                    <option value="">PRIVADO</option>
                                    <option value="">ABIERTO DIVISION</option>
                                    <option value="">ABIERTO DEPARTAMENTO</option>
                                    <option value="">ABIERTO UNIDAD</option>
                                    <option value="">SECRETO</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="nombres">N° Documento</label>
                                <input type="text" class="form-control" name="fecha_documento" required>
                            </div>
                        </div>

                        <hr>
                        <p><strong><code>III.- Digitalización del Documento</code></strong></p>
                        <div class="form-group">
                            <div class="col-md-3">
                                <label for="exampleInputFile">Cargar Documento</label>
                                <input type="file" id="exampleInputFile" name="documento_digital" required>
                                <p class="help-block">Archivo en formato .pdf ó .docx</p>
                            </div>
                        </div>
                        <p><strong><code>IV.- Destinatarios</code></strong></p>
                        <div class="form-group">
                            <div class="col-md-2">
                                <label>Destinatario Principal</label>
                                <select class="form-control" name="origen_datos">

                                </select>
                            </div>

                            <div class="col-md-2">
                                <br><br>
                                <button class="btn btn-xs btn-flat btn-success"><i class="fa fa-paper-plane"></i> Agregar Destinatario</button>
                            </div>
                        </div>
                        <hr>
                        <p><strong><code>V.- Datos del Ingreso</code></strong></p>
                        <div class="form-group">
                            <div class="col-md-2">
                                <label>Palabra Clave</label>
                                <input type="text" class="form-control" name="palabras_claves" required>
                            </div>

                            <div class="col-md-2">
                                <label>Palabra Clave II</label>
                                <input type="text" class="form-control" name="palabras_claves" required>
                            </div>
                            <div class="col-md-4">
                                <label>Observaciones</label>
                                <input type="text" class="form-control" name="palabras_claves" required>
                            </div>

                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                            <button id="btn" class="btn btn-primary pull-right">Ingresar Nuevo Proyecto</button>
                        </div>
                    </form>
                </div>

                <!-- /.box -->
            </div>
        </div>
        <!-- /.col -->
    </div>

@endsection
