import folium
import googlemaps
import pandas as pd

if __name__ == '__main__':

    villes = pd.read_csv('villes.csv', header=0, sep=';')

    gmaps = googlemaps.Client(key='')
    m = folium.Map(location=[50, 5], zoom_start=8.5)

    for i in range(0, len(villes.index.values)):

        location = "%s, %s" % (villes.loc[i, 'Ville'], villes.loc[i, 'Pays'])
        try:
            geocode_res = gmaps.geocode(location)
        except:
            print location
        dict_data = geocode_res[0]
        lat = dict_data['geometry']['location']['lat']
        lng = dict_data['geometry']['location']['lng']
        folium.Marker(location=[lat, lng]).add_to(m)


    m.save('288_basic_folium_map5.html')
