@section('styles')
<style>
    .editor {
        background-color: white;
        border: 3px solid deepskyblue;
        border-radius: 8px;
        min-height: 300px;
        padding: 20px;
        font-weight: bold;
        font-size: 40px;
        text-transform: uppercase;
        border-color: lightgray ;
        outline-color: lightgray ;
        height: 100%;
        max-height: 78vh;
    }
    .editor--success {
        border-color: lawngreen !important;
        outline-color: lawngreen !important;
        color: forestgreen;
        background-color: palegreen;
    }

</style>
@endsection

<div class="editor" id="editor" contenteditable="true">

</div>
