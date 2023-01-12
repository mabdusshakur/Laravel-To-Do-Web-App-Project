<div>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
                <div class="card rounded-3">
                    <div class="card-body p-4">

                        <h4 class="text-center my-3 pb-3">To Do App</h4>

                        <form wire:submit.prevent="{{$updateMode ==  true ? "updateTodo" : "addTodo"}}"
                            class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                            <div class="col-12">
                                <div class="form-outline">
                                    <input type="text" placeholder="Enter Your Todo" class="form-control"
                                        wire:model="todo">
                                </div>
                            </div>

                            @if ($updateMode == true)
                                <div class="col-12">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </div>
                            @else
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            @endif
                        </form>

                        <table class="table mb-4">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Todo's</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($todolists as $todos)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $todos->todos }}</td>
                                        <td>
                                            <button type="submit" class="btn btn-success ms-1"
                                                wire:click="deleteTodo({{ $todos->id }})">Finished</button>

                                            <!-- Button trigger modal -->
                                            <button wire:click="editeTodo({{ $todos->id }})" type="button"
                                                class="btn btn-primary">
                                                Edite
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
