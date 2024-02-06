<div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Book Name</th>
                <th scope="col">Author Name</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $b)
                <tr>
                    <th scope="row">{{$b->id}}</th>
                    <td>{{$b->Book}}</td>
                    <td>{{$b->Author}}</td>
                    <td>{{$b->Description}}</td>
                    <td> <button class="btn btn-warning" wire:click='update({{$b->id}})' >Update Book</button></td>
                    <td> <button class="btn btn-danger" wire:click="delete({{$b->id}})">Delete Book</button></td>
                </tr>

            @endforeach


            </tbody>
        </table>



</div>
