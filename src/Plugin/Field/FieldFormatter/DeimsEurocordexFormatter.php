<?php

namespace Drupal\deims_eurocordex_formatter\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'DeimsEurocordexFormatter' formatter.
 *
 * @FieldFormatter(
 *   id = "deims_eurocordex_formatter",
 *   label = @Translation("DEIMS Eurocordex Formatter"),
 *   field_types = {
 *     "text",
 *     "text_long",
 *     "string",
 *   },
 *   quickedit = {
 *     "editor" = "disabled"
 *   }
 * )
 */
 
class DeimsEurocordexFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
   
 
  public function settingsSummary() {
    $summary = [];
    $summary[] = $this->t('Formats a deims.id field of Drupal');
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    // Render each element as markup in case of multi-values.

    foreach ($items as $delta => $item) {
      
      $eurocordex_uuid_list = json_decode(file_get_contents(__DIR__ .  '/eurocordex_uuid_list.json'), true);
      $record_uuid = $item->value;

      if (array_key_exists($record_uuid, $eurocordex_uuid_list)) {
        $table_string = '<b>There is EURO-CORDEX climate scenario data available for this site:</b><br>';
        $table_string .= '<table class="table">';    

        $table_string .= '<tr>';
          $table_string .= '<td>Projected Near Surface Specific Humidity Change</td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_huss_EUR-11_rcp26/' . $record_uuid . '.EURO-CORDEX_huss_EUR-11_rcp26.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP26</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_huss_EUR-11_rcp45/' . $record_uuid . '.EURO-CORDEX_huss_EUR-11_rcp45.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP45</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_huss_EUR-11_rcp85/' . $record_uuid . '.EURO-CORDEX_huss_EUR-11_rcp85.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP85</a></td>';
        $table_string .= '</tr>';

        $table_string .= '<tr>';
          $table_string .= '<td>Projected Precipitation Change</td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_pr_EUR-11_rcp26/' . $record_uuid . '.EURO-CORDEX_pr_EUR-11_rcp26.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP26</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_pr_EUR-11_rcp45/' . $record_uuid . '.EURO-CORDEX_pr_EUR-11_rcp45.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP45</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_pr_EUR-11_rcp85/' . $record_uuid . '.EURO-CORDEX_pr_EUR-11_rcp85.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP85</a></td>';
        $table_string .= '</tr>';

        $table_string .= '<tr>';
          $table_string .= '<td>Projected Sea Level Pressure Change</td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_psl_EUR-11_rcp26/' . $record_uuid . '.EURO-CORDEX_psl_EUR-11_rcp26.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP26</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_psl_EUR-11_rcp45/' . $record_uuid . '.EURO-CORDEX_psl_EUR-11_rcp45.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP45</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_psl_EUR-11_rcp85/' . $record_uuid . '.EURO-CORDEX_psl_EUR-11_rcp85.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP85</a></td>';
        $table_string .= '</tr>';

        $table_string .= '<tr>';
          $table_string .= '<td>Projected Surface Downwelling Shortwave Radiation</td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_rsds_EUR-11_rcp26/' . $record_uuid . '.EURO-CORDEX_rsds_EUR-11_rcp26.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP26</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_rsds_EUR-11_rcp45/' . $record_uuid . '.EURO-CORDEX_rsds_EUR-11_rcp45.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP45</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_rsds_EUR-11_rcp85/' . $record_uuid . '.EURO-CORDEX_rsds_EUR-11_rcp85.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP85</a></td>';
        $table_string .= '</tr>';

        $table_string .= '<tr>';
          $table_string .= '<td>Projected Near-Surface Wind Speed</td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_sfcWind_EUR-11_rcp26/' . $record_uuid . '.EURO-CORDEX_sfcWind_EUR-11_rcp26.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP26</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_sfcWind_EUR-11_rcp45/' . $record_uuid . '.EURO-CORDEX_sfcWind_EUR-11_rcp45.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP45</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_sfcWind_EUR-11_rcp85/' . $record_uuid . '.EURO-CORDEX_sfcWind_EUR-11_rcp85.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP85</a></td>';
        $table_string .= '</tr>';

        $table_string .= '<tr>';
          $table_string .= '<td>Projected Near-Surface Air Temperature</td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_tas_EUR-11_rcp26/' . $record_uuid . '.EURO-CORDEX_tas_EUR-11_rcp26.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP26</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_tas_EUR-11_rcp45/' . $record_uuid . '.EURO-CORDEX_tas_EUR-11_rcp45.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP45</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_tas_EUR-11_rcp85/' . $record_uuid . '.EURO-CORDEX_tas_EUR-11_rcp85.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP85</a></td>';
        $table_string .= '</tr>';

        $table_string .= '<tr>';
          $table_string .= '<td>Projected Daily Maximum Near-Surface Air Temperature</td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_tasmax_EUR-11_rcp26/' . $record_uuid . '.EURO-CORDEX_tasmax_EUR-11_rcp26.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP26</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_tasmax_EUR-11_rcp45/' . $record_uuid . '.EURO-CORDEX_tasmax_EUR-11_rcp45.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP45</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_tasmax_EUR-11_rcp85/' . $record_uuid . '.EURO-CORDEX_tasmax_EUR-11_rcp85.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP85</a></td>';
        $table_string .= '</tr>';

        $table_string .= '<tr>';
          $table_string .= '<td>Projected Daily Minimum Near-Surface Air Temperature</td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_tasmin_EUR-11_rcp26/' . $record_uuid . '.EURO-CORDEX_tasmin_EUR-11_rcp26.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP26</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_tasmin_EUR-11_rcp45/' . $record_uuid . '.EURO-CORDEX_tasmin_EUR-11_rcp45.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP45</a></td>';
          $table_string .= '<td><a href="https://deims.org/export/eurocordex/eLTER_site_data.EURO-CORDEX_tasmin_EUR-11_rcp85/' . $record_uuid . '.EURO-CORDEX_tasmin_EUR-11_rcp85.dataV2018-02-07_procV2019-05-21_plotV2019-07-29.png" target="_blank">RCP85</a></td>';
        $table_string .= '</tr>';

        $table_string .= '</table><br>';
        $table_string .= '<p>You can also <a target="_blank" href="';
        $table_string .= $eurocordex_uuid_list[$record_uuid];
				$table_string .= '">download the entire climate scenario dataset for this site</a> from the EUDAT B2SHARE data store.</p>';

      }
      else {
        // need to return empty array for Drupal to realise the field is empty without throwing an error
        return array();
      }
      
      $elements[$delta] = [
        '#markup' => $table_string,
      ];

    }

    return $elements;

  }
	
}
