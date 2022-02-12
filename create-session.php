

create session:
 $request->session()->put('order_id', $cart_payment);

Get Session:
  $request->session()->get('order_id');
