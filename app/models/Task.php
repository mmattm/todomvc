<?PHP 
class Task extends Eloquent {

  public static $rules = [
    'title' => 'required'
  ];

  protected $fillable = ['title'];
  protected $attributes = array('done' => false );

  public function scopeActive($query)
  {
    return $query->where('done', '=', false);
  }

  public function scopeDone($query)
  {
    return $query->where('done', '=', true);
  }

}
?>