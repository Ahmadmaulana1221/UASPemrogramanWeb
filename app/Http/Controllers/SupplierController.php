public function index()
{
    $suppliers = Supplier::all();

    return view('Supplier.index', compact('suppliers'));
}

public function create()
{
    return view('Supplier.create');
}

public function edit($id)
{
    $supplier = Supplier::findOrFail($id);

    return view('Supplier.edit', compact('supplier'));
}