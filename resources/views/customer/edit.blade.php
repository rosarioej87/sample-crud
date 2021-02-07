<h1>Edit Customer Details</h1>

<form action="/customers/{{ $customer->id }}" method="POST">
    @method('PATCH')
    @include('customer.form')

    <button type="submit">update</button>

</form>
