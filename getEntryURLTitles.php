function getEntryURLTitles($channelName) {
  // Get the channel
  $channel = ee('Model')->get('Channel')->filter('channel_name', $channelName)->first();

  // Get the entries
  $entries = ee('Model')->get('ChannelEntry')
    ->filter('channel_id', $channel->channel_id)
    ->all();

  // Loop through the entries and get the URL titles
  $urlTitles = [];
  foreach ($entries as $entry) {
    $urlTitles[] = $entry->url_title;
  }

  // Return the URL titles
  return $urlTitles;
}
