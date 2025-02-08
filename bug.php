function foo(array $arr): void {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
}