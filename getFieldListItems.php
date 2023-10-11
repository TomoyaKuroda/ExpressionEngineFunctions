function getFieldListItems($field_name) : array {
  $sql = "SELECT field_list_items FROM `exp_channel_fields` WHERE field_name = '$field_name' ";
  $query = ee()->db->query($sql);
  $output = $query->result();
  $field_list_items =  explode("\n", $output[0]->field_list_items);
  return $field_list_items;
}
