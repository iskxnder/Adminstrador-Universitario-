<!--MODAL-->
<div class="modal fade" id="deleteStudent" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">Eliminar Estudiante</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['route' => ['students.destroy', 1], 'method' => 'DELETE']) !!}
                {{ csrf_field() }}
                <div class="modal-body">
                    ¿Está seguro que desea eliminar a este estudiante?
                      <input type="hidden" name="eliminar" id="studentId">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Sí</button>
                {!! Form::close() !!}
                
                </div>
            </div>
        </div>
    </div>